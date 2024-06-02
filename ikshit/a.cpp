#include <bits/stdc++.h>

using namespace std;

#define int int64_t

int dfs(int c, int p) {
  visited[c] = true; 
  parent[c][0] = p;
  depth[c] = depth[p] + 1; 
  for (int i = 1; i < LOG; i++) {
    p[c][i] = p[p[c][i - 1]][i - 1]; 
  } 
  for (auto child: adj[c]) {
    if (visited[child]) continue; 
    dfs(child, c); 
    height[c] = max(height[c], height[child] + 1); 
  }
  return 0; 
}

int32_t main() {
  ios::sync_with_stdio(false); 
  cin.tie(0);
  int t; 
  cin >> t; 
  while(t--) {
    int n; 
    cin >> n; 
    vector<vector<int>> a(n, vector<int> (n)); 
    for (int i = 0; i < n; i++) {
      for (int j = 0; j < n; j++) {
        cin >> a[i][j]; 
      }
    }
    int answer = 0; 
    for (int i = 0; i < n; i++) {
      for (int j = 0; j < n; j++) {
        if (a[i][j] == 1 and visited[i][j] == false) {
          answer += 1; 
          y_combinator([&] (auto self, int x, int y) -> void {
            visited[x][y] = true; 
            for (int k = 0; k < 4; k++) {
              int nx = x + dx[k]; 
              int ny = y + dy[k]; 
              if (nx >= 0 and ny >= 0 and nx < n and ny < n and visited[nx][ny] == false and a[nx][ny] == 1) {
                self(nx, ny); 
              }
            }
          })
        }
      }
    }
    cout << answer << "\n"; 
    continue; 
  }
  return 0;
}